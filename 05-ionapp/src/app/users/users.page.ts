import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-users',
  templateUrl: './users.page.html',
  styleUrls: ['./users.page.scss'],
})
export class UsersPage {
  users any[] = [
    { name: "Fiorella", image: "fiorella.png", poste: "CEO"},
    { name: "Matthieu", image: "matthieu.png", poste: "CTO"},
  ];

  constructor() { }

}
