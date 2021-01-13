import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { CreateaccountComponent } from './pages/createaccount/createaccount.component';
import { SignupresturantComponent } from './pages/signupresturant/signupresturant.component';
import { SignupdeliveryComponent } from './pages/signupdelivery/signupdelivery.component';
import { DashboardComponent } from './pages/dashboard/dashboard.component';
import { HomeComponent } from './pages/home/home.component';
import { AddmealComponent } from './pages/addmeal/addmeal.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

import { AngularFileUploaderModule } from "angular-file-uploader";
import {MaterialModule} from './material/material.module';
import { FoodsearchComponent } from './pages/foodsearch/foodsearch.component';


import {FormsModule} from '@angular/forms';
import {ReactiveFormsModule} from '@angular/forms';
import {HttpClientModule} from '@angular/common/http';
import { AddmealimageComponent } from './pages/addmealimage/addmealimage.component';
import { AddlogoComponent } from './pages/addlogo/addlogo.component';
import { LoginComponent } from './pages/login/login.component';
import { CheckoutComponent } from './pages/checkout/checkout.component';
import { FoodfilteredComponent } from './pages/foodfiltered/foodfiltered.component';

@NgModule({
  declarations: [
    AppComponent,
    CreateaccountComponent,
    SignupresturantComponent,
    SignupdeliveryComponent,
    DashboardComponent,
    HomeComponent,
    AddmealComponent,
    FoodsearchComponent,
    AddmealimageComponent,
    AddlogoComponent,
    LoginComponent,
    CheckoutComponent,
    FoodfilteredComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    MaterialModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    AngularFileUploaderModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
