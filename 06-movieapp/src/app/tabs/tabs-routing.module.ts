import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { TabsPage } from './tabs.page';

const routes: Routes = [

  {
    path: '',
    component: TabsPage,
    
    children: [
      {
        path: 'home',
        loadChildren: () => import('../home/home.module').then( m => m.HomePageModule)
      },
      {
        path: 'populaires',
        loadChildren: () => import('../populaires/populaires.module').then( m => m.PopulairesPageModule)
      },
      {
        path: 'top',
        loadChildren: () => import('../top/top.module').then( m => m.TopPageModule)
      },
      {
        path: 'actuellement',
        loadChildren: () => import('../actuellement/actuellement.module').then( m => m.ActuellementPageModule)
      },
    ]
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class TabsPageRoutingModule {}
