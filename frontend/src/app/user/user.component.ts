import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { User } from '../models/User';
import { UsersService } from '../services/users.service';

@Component({
  selector: 'app-user',
  templateUrl: './user.component.html',
  styleUrls: ['./user.component.scss'],
})
export class UserComponent implements OnInit {
  public user$: Promise<User> | undefined;
  constructor(
    private usersService: UsersService,
    private activatedRoute: ActivatedRoute
  ) {}

  ngOnInit(): void {
    this.getUser();
  }

  getUser = async () => {
    let routeParamId: string | number | null =
      this.activatedRoute.snapshot!.paramMap.get('id');
    if (routeParamId) {
      routeParamId = parseInt(routeParamId);
      this.usersService.getUserById(routeParamId);
    }
  };
}
