import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-populaires',
  templateUrl: './populaires.page.html',
  styleUrls: ['./populaires.page.scss'],
})
export class PopulairesPage {
  popularity: any[] = [];

  constructor(private http: HttpClient) {}

  ionViewWillEnter() {
    this.http.get('https://api.themoviedb.org/3/movie/popular?api_key=a4872679cc543a16475400119b475fb6')
    .subscribe(response => {
      console.log(response['results']);
      this.popularity = response['results'];
    });
  }

}