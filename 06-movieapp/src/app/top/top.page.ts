import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-top',
  templateUrl: './top.page.html',
  styleUrls: ['./top.page.scss'],
})
export class TopPage {
  top: any[] = [];
  constructor(private http: HttpClient) {}

  ionViewWillEnter() {
    this.http.get('https://api.themoviedb.org/3/movie/popular?api_key=a4872679cc543a16475400119b475fb6')
    .subscribe(response => {
      console.log(response['results']);
      this.top = response['results'];
    });
  }
}
