import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { environment } from '../environments/enviroment';
import { User } from '../models/User';

@Injectable({
  providedIn: 'root',
})
export class UsersService {
  private url = environment.urlEndPoint;

  constructor(private httpClient: HttpClient) {}

  //Obtener todos los usuarios
  getAllUsers = async (): Promise<User[]> => {
    return (await this.httpClient
      .get(`${this.url}users`)
      .toPromise()) as Promise<User[]>;
  };

  //Obtener los usuarios por ID
  getUserById = async (id: number): Promise<User[]> => {
    return (await this.httpClient
      .get(`${this.url}users/${id}`)
      .toPromise()) as Promise<User[]>;
  };

  //Eliminar un usuario
  deleteUserById = async (id: number | undefined): Promise<Object> => {
    return (await this.httpClient
      .delete(`${this.url}users/${id}`)
      .toPromise()) as Promise<Object>;
  };
}
