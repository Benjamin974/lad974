<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $product = new Product(["name"=> "Asperges bio blanches grosses CARREFOUR BIO", "price" => 4.90, "description" => "le bocal de 210g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Asperges bio blanches moyennes ROCHEFONTAINE", "price" => 4.18, "description" => "le bocal de 205 g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Asperges bio vertes grosses CARREFOUR BIO", "price" => 2.99, "description" => "le bocal de 37cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Champagne bio Brut BARON FUENTE GALIPETTE", "price" => 23.95, "description" => "la bouteille de 75cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Champagne Brut bio CHARLES DE COURANCE", "price" => 20.25, "description" => "la bouteille de 75cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Champagne Pinot Menier - Pinot Noir Bio ALFRED ROTHSCHILD", "price" => 26.94, "description" => "la bouteille de 75cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Champagne Rosée de Saignée bio CHRISTOPHE LEFEVRE ROSEE", "price" => 37.30, "description" => "la bouteille de 75cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Champignons bio de Paris émincés CARREFOUR BIO", "price" => 1.63, "description" => "le bocal de 170g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Champignons de paris émincés bio BONDUELLE", "price" => 2.34, "description" => "La boite de 230g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Champignons de Paris émincés CARREFOUR BIO", "price" => 2.09, "description" => "la boite de 230g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Châtaignes bio pelées au feu CARREFOUR BIO", "price" => 4.49, "description" => "le bocal de 210g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Cœur de palmier Bio GEANT VERT", "price" => 3.64, "description" => "la boite de 220g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Cœur de palmier bio tendre ROCHEFONTAINE", "price" => 3.06, "description" => "la boîte de 220g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Cœurs de palmier bio sauvage CARREFOUR BIO", "price" => 3.39, "description" => "le bocal de 250g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Epinard en branche Bio D'AUCY", "price" => 2.95, "description" => "le pot de 58cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Epinards bio en branches CARREFOUR BIO", "price" => 2.10, "description" => "le bocal de 315g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Filets de Maquereaux au Muscadet Bio SAUPIQUET", "price" => 2.35, "description" => "la boite de 120g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Filets de Maquereaux huile d'olive Bio SAUPIQUET", "price" => 2.35, "description" => "la boite de 120g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Filets de maquereaux Moutarde douce Bio SAUPIQUET", "price" => 2.35, "description" => "la boite de 120g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Flageolets bio CARREFOUR BIO", "price" => 2.85, "description" => "le pot de 420g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Flageolets bio CARREFOUR BIO", "price" => 2.85, "description" => "le bocal de 420g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricot rouge Bio D'AUCY", "price" => 2.02, "description" => "le pot de 205g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricot vert Bio D'AUCY", "price" => 2.79, "description" => "le bocal de 290g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricots beurre bio extra fins CARREFOUR BIO", "price" => 1.82, "description" => "le bocal de 180g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricots bio verts & beurre extra fins CARREFOUR BIO", "price" => 2.69, "description" => "le bocal de 280g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricots blancs bio à la tomate CARREFOUR BIO", "price" => 1.91, "description" => "le bocal de 446mL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricots blancs bio cuisinés CARREFOUR BIO", "price" => 1.94, "description" => "le bocal de 265g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricots rouges Bio BONDUELLE", "price" => 2.08, "description" => "le lot de 2 boites de 125g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricots rouges CARREFOUR BIO", "price" => 1.89, "description" => "le bocal de 265g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricots verts bio extra fin coupés Carrefour Bio", "price" => 2.15, "description" => "le bocal de 360g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricots verts bio extra fins coupés CARREFOUR BIO", "price" => 2.05, "description" => "le bocal de 360g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricots verts bio extra fins ROCHEFONTAINE", "price" => 2.33, "description" => "le bocal de 180 g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricots verts bio extra-fin CARREFOUR BIO", "price" => 1.05, "description" => "la boite de 400g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricots verts bio extra-fins ROCHEFONTAINE", "price" => 3.02, "description" => "le bocal de 280 g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricots verts extra fins CARREFOUR BIO", "price" => 1.82, "description" => "le bocal de 180g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricots verts extra-fins cueillis et rangés main Bio ROCHEFONTAINE", "price" => 3.73, "description" => "le pot de 660g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Haricots verts très fins CARREFOUR CLASSIC'", "price" => 0.93, "description" => "la boite de 440g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Julienne cœurs de palmiers bio Carrefour Bio", "price" => 1.99, "description" => "la boite de 250g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Jus de citron bio CARREFOUR BIO", "price" => 2.99, "description" => "le flacon de 0.5L","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Jus de citron bio pur jus CARREFOUR BIO", "price" => 1.55, "description" => "la bouteille de 25cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait bio de chèvre Carrefour Bio", "price" => 2.49, "description" => "la brique de 75cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait bio demi écrémé CARREFOUR BIO", "price" => 0.99, "description" => "la bouteille d'1L","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait bio demi-écrémé CARREFOUR BIO", "price" => 1.06, "description" => "la brique d'1L","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait bio demi-écrémé Carrefour Bio", "price" => 0.91, "description" => "la brique d'1L","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait bio demi-écrémé Carrefour Bio", "price" => 1.45, "description" => "la bouteille d'1L","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Bio Sans Lactose LACTEL", "price" => 7.50, "description" => "le pack de 6 bouteilles de 50cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Bio Sans Lactose Matin Léger LACTEL", "price" => 1.95, "description" => "la bouteille de 1 l","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Demi-Ecreme Bio Calcium AGRILAIT", "price" => 1.15, "description" => "la bouteille de 1 l","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Demi-Ecreme Bio CANDIA", "price" => 1.30, "description" => "la brique de 1L","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Demi-écrémé bio CANDIA", "price" => 1.08, "description" => "la brique de 1L","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Demi-Ecreme Bio Grandlait CANDIA", "price" => 1.42, "description" => "la bouteille de 1 l","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Demi-Ecreme Bio LACTEL BIO", "price" => 1.32, "description" => "la brique de 1l","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Demi-Ecreme Bio LE GALL", "price" => 1.14, "description" => "la brique de 1 l","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Demi-Ecreme Bio Pasteurisé de Bretagne Bridel", "price" => 1.69, "description" => "la bouteille d'1L","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Demi-Ecreme Bio Sans OGM LACTEL", "price" => 4.81, "description" => "le pack de 6 bouteilles de 50cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Demi-Ecreme Bio Sans OGM LACTEL", "price" => 0.65, "description" => "la bouteille de 25 cl","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Demi-Ecreme Bio Sans OGM LACTEL", "price" => 0.87, "description" => "la bouteille de 50 cl","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Demi-Ecreme Bio Sans OGM LACTEL", "price" => 1.28, "description" => "la bouteille de 1 l","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Demi-Ecreme Bio Stérilisé UHT CARREFOUR BIO", "price" => 0.95, "description" => "la bouteille d'1L","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Demi-Ecreme Bio Stérilisé UHT CARREFOUR BIO", "price" => 0.73, "description" => "la bouteille de 50cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Demi-Ecreme Bio Stérilisé UHT FAIREFRANCE", "price" => 1.31, "description" => "la bouteille d'1L","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Demi-Ecreme Bio Stérilisé UHT VERNEUIL", "price" => 1.20, "description" => "la brique de 1 l","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Ecreme Bio Sans OGM 0% Mat.Gr. LACTEL", "price" => 1.40, "description" => "la bouteille de 1 l","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait écrémé CARREFOUR BIO", "price" => 0.94, "description" => "la bouteille d'1L","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Entier Bio LACTEL", "price" => 1.50, "description" => "la bouteille de 1 l","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Entier Bio Sans OGM LACTEL", "price" => 1.13, "description" => "la bouteille de 50 cl","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Entier Bio Sans OGM LACTEL", "price" => 6.78, "description" => "le pack de 6 bouteilles de 50cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Entier Bio UHT Sans Lactose MATIN LEGER", "price" => 2.20, "description" => "la bouteille de 1L","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait entier CARREFOUR BIO", "price" => 1.04, "description" => "la bouteille d'1L","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Fermenté Kefir Bio Doux LACTEL", "price" => 1.54, "description" => "la bouteille de 50cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Frais Entier Bio CARREFOUR BIO", "price" => 1.46, "description" => "la bouteille d'1L","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lait Frais Entier Bio de Montagne Grandlait CANDIA", "price" => 1.79, "description" => "la bouteille de 1 l","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lentilles Bio BONDUELLE", "price" => 2.08, "description" => "le lot de 2 boites de 130g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lentilles bio vertes CARREFOUR BIO", "price" => 1.65, "description" => "le bocal de 446mL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lentilles cuisinées aux petits légumes Bio ROCHEFONTAINE", "price" => 2.33, "description" => "le bocal de 290g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Lentilles cuisinées fondue d'oignons Bio RAYNAL ET ROQUELAURE", "price" => 2.50, "description" => "la boite de 400g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Macédoines bio de légumes CARREFOUR BIO", "price" => 2.10, "description" => "le bocal de 215g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Maïs bio CARREFOUR BIO", "price" => 1.29, "description" => "le pot de 230g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Maïs bio extra croquant GEANT VERT", "price" => 2.35, "description" => "les 2 boites de 140g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Mais Bio GEANT VERT", "price" => 2.09, "description" => "le lot de 2 boites -280 -","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Maïs bio s/sucres ajoutés BONDUELLE", "price" => 1.47, "description" => "la boite de 285g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Mogette bio de Vendée CARREFOUR BIO", "price" => 1.95, "description" => "le bocal de 265g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio Calibre Moyen Sans-Antibiotique LOUE", "price" => 2.93, "description" => "la boite de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio COCORETTE", "price" => 2.78, "description" => "la boite de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air", "price" => 4.25, "description" => "la boite de 12","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air", "price" => 2.35, "description" => "la boite de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air", "price" => 4.60, "description" => "la boite de 12","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air", "price" => 2.55, "description" => "la boite de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air BABY COQUE", "price" => 2.88, "description" => "la boite de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air BABY COQUE", "price" => 4.60, "description" => "la boite de 12","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air Calibre Gros L'OEUFS DE NOS VILLA", "price" => 2.65, "description" => "la boite de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air Calibre Moyen CARREFOUR BIO", "price" => 1.95, "description" => "la boite de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air CARREFOUR BIO", "price" => 3.09, "description" => "la boite de 10","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air CARREFOUR BIO", "price" => 4.35, "description" => "la boite de 15","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air CARREFOUR BIO", "price" => 1.55, "description" => "la boite de 4","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air L'OEUFS DE NOS VILLA", "price" => 4.19, "description" => "la boite de 10","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air L'OEUFS DE NOS VILLA", "price" => 3.89, "description" => "la boite de 10","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air L'OEUFS DE NOS VILLA", "price" => 2.74, "description" => "la boite de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air REFLETS DE FRANCE", "price" => 2.15, "description" => "la boîte de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air TERRES DE BREIZH", "price" => 4.50, "description" => "la boite de 10","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio de Plein Air Tout Calibre Gros Et Très Gros", "price" => 1.75, "description" => "la boite de 4","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs bio de poules plein air BREIZH'ON EGG", "price" => 2.95, "description" => "la boite de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs bio moyens COQUY", "price" => 2.85, "description" => "la boite de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio OEUF ARRADOY", "price" => 4.20, "description" => "la boite de 10","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio OEUF ARRADOY", "price" => 2.80, "description" => "la boite de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs bio plein air AVIBRESSE", "price" => 2.45, "description" => "la boite de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio Sans OGM LA NOUVELLE AGRICULTURE", "price" => 4.20, "description" => "la boite de 10","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs Bio Sans OGM LA NOUVELLE AGRICULTURE", "price" => 2.73, "description" => "la boite de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs de Plein Air Bio Sans OGM C'EST QUI LE PATRON", "price" => 3.00, "description" => "la boite de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Œufs de Plein Air Calibre Moyen Label Rouge BABY COQUE", "price" => 4.05, "description" => "la boite de 12","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Oeufs plein air Bio PLEINE FORME", "price" => 5.85, "description" => "la boite de 20 oeufs","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Olives mix à l ail Bio TRAMIER", "price" => 2.75, "description" => "le sachet de 150g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Olives noires à la grecque Bio TRAMIER", "price" => 3.02, "description" => "le pot de 130g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Olives vertes dénoyautée ail & persil bio TRAMIER", "price" => 3.02, "description" => "le bocal de 130g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Olives vertes denoyautées bio TRAMIER", "price" => 2.90, "description" => "le bocal de 130g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Pâté bio de campagne supérieur CARREFOUR BIO", "price" => 2.45, "description" => "la verrine de 180g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Pâté Bio HENAFF", "price" => 1.74, "description" => "la conserve de 76 g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Petits pois bio CARREFOUR BIO", "price" => 2.69, "description" => "le bocal de 420g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Petits pois bio extra-fins CARREFOUR BIO", "price" => 2.69, "description" => "le bocal de 72cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Petits pois carottes Bio ROCHEFONTAINE", "price" => 2.82, "description" => "le pot de 360g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Petits pois carottes Carrefour Extra", "price" => 1.09, "description" => "la boite de 300g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Petits pois D'AUCY", "price" => 1.72, "description" => "le pot de 380g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Petits pois doux Carrefour Extra", "price" => 1.09, "description" => "la boite de 300g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Petits pois fin Bio ROCHEFONTAINE", "price" => 2.93, "description" => "le pot de 360g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Petits pois très fins jeunes carottes bio CARREFOUR BIO", "price" => 1.49, "description" => "le pot de 220g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Pois chiches Bio BONDUELLE", "price" => 2.08, "description" => "le lot de 2 boites de 130g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Pois chiches bio Carrefour Bio", "price" => 1.99, "description" => "la boite de 680g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Pois chiches Bio D'AUCY", "price" => 1.99, "description" => "le pot de 215g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Pois chiches Bio ROCHEFONTAINE", "price" => 2.14, "description" => "le pot e 360g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Pois chiches sel de Noirmoutier CARREFOUR BIO", "price" => 1.69, "description" => "le bocal de 265g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Poivrons bio Piquillo entiers CARREFOUR BIO", "price" => 3.08, "description" => "le bocal de 165g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Sardines à l'huile d'olive vierge Bio CONNETABLE", "price" => 2.51, "description" => "la boite de 135 g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Sardines huile d'olive LES DIEUX", "price" => 1.93, "description" => "la boite de 115 g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Sardines sans arêtes sauce tomate à l'huile d'olive vierge extra Bio CONNETABLE", "price" => 2.38, "description" => "la boite de 140g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Sauce crudités Dijonnaise sans huile Bio LE JARDIN D'ORANTE", "price" => 3.92, "description" => "la bouteille de 500 ml","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Terrine bio à la châtaigne CHARLES ANTONA", "price" => 4.05, "description" => "le pot de 140 g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Terrine bio de foie de volaille CARREFOUR BIO", "price" => 2.29, "description" => "la terrine de 180g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Terrine bio figue miel CHARLES ANTONA", "price" => 4.05, "description" => "le pot de 140 g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Terrine bio veau aux olives CHARLES ANTONA", "price" => 4.05, "description" => "le pot de 140 g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Terrine de campagne Bio ALAIN MARTIN", "price" => 2.50, "description" => "le pot de 180g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Terrine de campagne Bio HENAFF", "price" => 3.10, "description" => "le pot de 180g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Tomates bio entières pelées Carrefour Bio", "price" => 1.59, "description" => "la boite de 240g net égoutté","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Tomates séchées bio à l'huile de tournesol Polli", "price" => 2.96, "description" => "le pot de 190g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Vinaigne balsamique de Modène Bio carapelli", "price" => 6.28, "description" => "la bouteuil de 500mL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Vinaigre Balsamique Bio PONTI", "price" => 4.15, "description" => "la bouteille de 500mL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Vinaigre bio balsamique CARREFOUR BIO", "price" => 3.69, "description" => "la bouteille de 50cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Vinaigre bio de vin rouge CARREFOUR BIO", "price" => 1.59, "description" => "la bouteille de 50cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Vinaigre blanc bio CARREFOUR BIO", "price" => 0.99, "description" => "la bouteille d'1L","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Vinaigre de cidre CARREFOUR BIO", "price" => 1.35, "description" => "la bouteille de 50cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Vinaigre vin rouge Bio AMORA", "price" => 2.28, "description" => "la bouteille de 500mL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Vinaigrette à la pomme Bio CARREFOUR BIO", "price" => 3.30, "description" => "la bouteille de 36cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Vinaigrette balsamique Bio CLOVIS", "price" => 2.70, "description" => "la bouteuille de 35cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Vinaigrette balsamique citron & basilic PUGET", "price" => 3.54, "description" => "la bouteille de 330mL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Vinaigrette tomates séchées CARREFOUR BIO", "price" => 3.39, "description" => "la bouteille de 36cL","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Bananes Bio CARREFOUR BIO", "price" => 1.99, "description" => "le sachet de 5 fruits","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Citrons jaunes Primofiori Bio CARREFOUR BIO", "price" => 1.29, "description" => "la barquette de 500g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Avocat Hass Bio", "price" => 1.19, "description" => "la pièce","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Oranges bio Navel CARREFOUR BIO", "price" => 1.49, "description" => "le filet de 1 kg","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Tomate ronde en grappe Bio CARREFOUR BIO", "price" => 1.99, "description" => "la barquette de 600g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Tomate ronde en grappe Bio CARREFOUR BIO", "price" => 1.99, "description" => "la barquette de 600g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Pomelos roses Bio", "price" => 1.49, "description" => "le sachet de 2","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Aubergines Bio", "price" => 2.00, "description" => "la barquette de 2","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Raisin Bio blanc Italia", "price" => 1.99, "description" => "la barquette de 500g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Concombre Bio CARREFOUR BIO", "price" => 1.29, "description" => "la pièce","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Tomates cerises rondes Bio", "price" => 1.50, "description" => "la barquette de 200g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Avocat Bio Hass", "price" => 1.59, "description" => "la pièce","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Kiwi Hayward Bio CARREFOUR BIO", "price" => 2.79, "description" => "la barquette de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Oranges Navel Bio", "price" => 1.49, "description" => "le filet de 1 kg","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Framboises Bio", "price" => 1.99, "description" => "la barquette de 125g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Feuilles de Laurier Bio JARDIN BIO", "price" => 1.99, "description" => "le sachet de 25g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Avocats Hass Bio", "price" => 1.99, "description" => "le lot de 2","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Pastèque Bio", "price" => 2.69, "description" => "la pièce","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Kiwi Hayward Bio", "price" => 3.49, "description" => "la barquette de 6","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Romarin Bio JARDIN BIO", "price" => 1.99, "description" => "le sachet de 40g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Mandarines clemenvillas Bio", "price" => 2.49, "description" => "la barquette de 1Kg","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Avocats Bio Hass", "price" => 1.99, "description" => "le lot de 2","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Aubergine Bio", "price" => 1.19, "description" => "la pièce","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Plant de Basilic thai Bio frais 9cm", "price" => 1.99, "description" => "le pot","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Plant de Menthe Bio frais marocaine", "price" => 1.99, "description" => "le pot","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Plant de Ciboulette Bio frais", "price" => 1.99, "description" => "le pot","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Plant de Ciboulette Bio frais", "price" => 1.99, "description" => "le pot - 500g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Reine des près Bio JARDIN BIO", "price" => 1.99, "description" => "le sachet de 50g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Vigne rouge Bio JARDIN BIO", "price" => 2.08, "description" => "le sachet de 25g","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Bananes Bio Cavendish", "price" => 1.99, "description" => "le sachet de 5 fruits","id_company" => 1, "quantite" => 20]); $product->save();
        $product = new Product(["name"=> "Avocat Bio CARREFOUR BIO", "price" => 1.19, "description" => "la pièce","id_company" => 1, "quantite" => 20]); $product->save();
        

    }
}
