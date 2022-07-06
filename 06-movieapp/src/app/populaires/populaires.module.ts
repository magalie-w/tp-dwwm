import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { PopulairesPageRoutingModule } from './populaires-routing.module';

import { PopulairesPage } from './populaires.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    PopulairesPageRoutingModule
  ],
  declarations: [PopulairesPage]
})
export class PopulairesPageModule {}
