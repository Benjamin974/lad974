import { BehaviorSubject } from "rxjs";
import { Role } from '../_helpers/role';
import { requestOptions } from "../_helpers/request-options";
import { handleResponse } from "../_helpers/handle-response";

//@ts-ignore
import _ from 'lodash'

const store: any = localStorage.getItem('currentUser');

const currentUserSubject = new BehaviorSubject(
  JSON.parse(store)
);

export const authenticationService = {
  connected,
  login,
  logout,
  isAdmin,
  passwordReset,
  currentUser: currentUserSubject.asObservable(),
  get currentUserValue() {
    return currentUserSubject.value;
  }
};

function connected() {
  const user = localStorage.getItem("currentUser");
  return !_.isNull(user)
}

function login(user: any) {
  return fetch(
    `/api/login`,
    requestOptions.post(user)
  )
    .then(handleResponse)
    .then((data) => {
      // store user details and jwt token in local storage to keep user logged in between page refreshes
      if (data.message == 'Utilisateur suspendu') {
        return data.message;

      } else if (data.message == 'login invalide') {
        return data.message
      } else {
        if (data.message == undefined) {
          // store user details and jwt token in local storage to keep user logged in between page refreshes
          localStorage.setItem("currentUser", JSON.stringify(data.data));
          currentUserSubject.next(data.data);
          return data.data;


        } else {
          return data.message;
        }
      }
    });
}


function passwordReset(user: any) {
  return fetch(
    `/password/reset`,
    requestOptions.post(user)
  )
    .then(handleResponse)
    .then(({ data }) => {
      // store user details and jwt token in local storage to keep user logged in between page refreshes
      localStorage.setItem("currentUser", JSON.stringify(data));
      currentUserSubject.next(data);

      return data;
    });

}

function logout() {
  // remove user from local storage to log user out
  localStorage.removeItem("currentUser");
  currentUserSubject.next(null);
}

function isAdmin() {
  return role() === Role.Admin;
}

function role() {
  let user: any = localStorage.getItem('currentUser');
  if (!user) {
    return null;
  }
  user = JSON.parse(user);
  return user.role.name;
}