import { authenticationService } from "../_services/authenticationService";

export const requestOptions = {
  get() {
    return {
      method: "GET",
      ...headers()
    };
  },
  post(body: any) {
    return {
      method: "POST",
      ...headers(),
      body: JSON.stringify(body)
    };
  },
  patch(body: any) {
    return {
      method: "PATCH",
      ...headers(),
      body: JSON.stringify(body)
    };
  },
  put(body: any) {
    return {
      method: "PUT",
      ...headers(),
      body: JSON.stringify(body)
    };
  },
  delete() {
    return {
      method: "DELETE",
      ...headers()
    };
  }
};

function headers() {
  const currentUser: any = authenticationService.currentUserValue || {};
  const authHeader: any = currentUser.token
    ? { Authorization: "Bearer " + currentUser.token }
    : {};
  return {
    headers: {
      ...authHeader,
      "Content-Type": "application/json"
    }
  };
}
