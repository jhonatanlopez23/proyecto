import { Component, OnInit } from '@angular/core';
import { User } from '../models/User';
import { UsersService } from '../services/users.service';

@Component({
  selector: 'app-users',
  templateUrl: './users.component.html',
  styleUrls: ['./users.component.scss'],
})
export class UsersComponent implements OnInit {
  public users$: Promise<User[]> | undefined;
  constructor(private usersService: UsersService) {}

  ngOnInit(): void {
    this.getUsers();
  }

  deleteUser = (id: number | undefined) => {
    if (confirm('Esta seguro de eliminar este usuario')) {
      this.usersService
        .deleteUserById(id)
        .then((res) => {
          alert('Eliminado');
        })
        .catch((err) => {
          alert('Ocurrio un error');
          console.log(err);
        })
        .finally(() => this.getUsers());
    }
  };

  getUsers = () => {
    this.users$ = this.usersService.getAllUsers();
    console.log(this.users$);
  };
}
