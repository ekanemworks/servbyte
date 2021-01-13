import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {BasicClassType} from './signupclass';

@Injectable({
  providedIn: 'root'
})
export class ApiconnectService {

  constructor(private http: HttpClient) { }

  // The Website URL (CAN BE CHANGED TO ANYTHING YOU WANT)
  WEBSITE = 'http://localhost/Apps/ServByte/';


  registerresturant(signup: BasicClassType[]): any
  {

    return this.http.post(this.WEBSITE+'signup.php', signup);

  }

  registerdeliverycompany(signup: BasicClassType[]): any
  {

    return this.http.post(this.WEBSITE+'signupdeliverycompany.php', signup);

  }


  loginverification(signup: BasicClassType[]): any
  {

    return this.http.post(this.WEBSITE+'loginverification.php', signup);

  }


  addmeal(data: BasicClassType[]): any
  {

    return this.http.post(this.WEBSITE+'addmeal.php', data);

  }


  getMeal(): any
  {
    return this.http.get<BasicClassType[]>(this.WEBSITE+'searchmeals.php');
  }


}


