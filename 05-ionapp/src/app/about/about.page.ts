import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-about',
  templateUrl: './about.page.html',
  styleUrls: ['./about.page.scss'],
})
export class AboutPage {
  name: string = "Ioapp"; //nale est une propriété
  
  changeName() {
    this.name = "Magalie";
  }
}
