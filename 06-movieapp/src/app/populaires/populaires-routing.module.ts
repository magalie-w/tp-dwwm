import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { PopulairesPage } from './populaires.page';

const routes: Routes = [
  {
    path: '',
    component: PopulairesPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class PopulairesPageRoutingModule {}
