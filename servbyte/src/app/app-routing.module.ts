import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import {AddmealComponent} from './pages/addmeal/addmeal.component';
import {AddmealimageComponent} from './pages/addmealimage/addmealimage.component';
import {CreateaccountComponent} from './pages/createaccount/createaccount.component';
import {DashboardComponent} from './pages/dashboard/dashboard.component';
import {HomeComponent} from './pages/home/home.component';
import {SignupdeliveryComponent} from './pages/signupdelivery/signupdelivery.component';
import {SignupresturantComponent} from './pages/signupresturant/signupresturant.component';
import {FoodsearchComponent} from './pages/foodsearch/foodsearch.component';
import {LoginComponent} from './pages/login/login.component';
import {CheckoutComponent} from './pages/checkout/checkout.component';
import {AddlogoComponent} from './pages/addlogo/addlogo.component';

const routes: Routes = [
  {path: 'addmeal', component: AddmealComponent},
  {path: 'addmealimage/:id', component: AddmealimageComponent},
  {path: 'createaccount', component: CreateaccountComponent},
  {path: 'dashboard', component: DashboardComponent},
  {path: '', component: HomeComponent},
  {path: 'signupdelivery', component: SignupdeliveryComponent},
  {path: 'signupresturant', component: SignupresturantComponent},
  {path: 'foodsearch', component: FoodsearchComponent},
  {path: 'login', component: LoginComponent},
  {path: 'checkout/:id', component: CheckoutComponent},
  {path: 'addlogo/:id', component: AddlogoComponent}

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
