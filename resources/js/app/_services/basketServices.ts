import { EventBus } from '../eventBus'
//@ts-ignore
import _ from 'lodash';

export const basketServices = {
    addProducts,
    quantiteBasketSize,
    getBasket,
    emitBasket,
    replaceQuantity,
    delBasket
}

function addProducts(product: any, quantite: any) {

    let basket: any = getBasket();

    if (!_.hasIn(basket, buildkey(product))) {
        basket[buildkey(product)] = {
            id: product.id,
            name: product.name,
            quantite: parseInt(quantite),
            picture: product.picture,
            price: product.price
        }
    }
    else {
        basket[buildkey(product)].quantite += parseInt(quantite)
    }
    storeBasket(basket)

}

function replaceQuantity(product: any) {
    let basket: any = getBasket()
    if (_.hasIn(basket, buildkey(product))) {
        basket[buildkey(product)] = product

        if ((basket[buildkey(product)].quantite) == 0) {
            _.unset(basket, buildkey(product))
        }
    }
    else {
        throw 'err'
    }
    storeBasket(basket)
}

function delBasket() {

    localStorage.removeItem('currentBasket');

}

function buildkey(product: any) {
    return 'product_' + product.id
}

function getBasket() {
    let basket: any = localStorage.getItem('currentBasket');
    if (!basket) {
        basket = {}
    } else {
        basket = JSON.parse(basket)
    }

    return basket
}

function storeBasket(basket: any) {
    localStorage.setItem('currentBasket', JSON.stringify(basket));
    EventBus.$emit('basket', basket)
    emitBasketSize(basket)

}

function emitBasketSize(basket: any) {
    let basketSize = _.toPairs(basket).length;
    EventBus.$emit('basketLength', basketSize);
}

function emitBasket() {
    let basket = getBasket()
    return basket
}

function quantiteBasketSize() {
    let quantite = getBasket()
    quantite = _.toPairsIn(quantite).length
    return quantite
}