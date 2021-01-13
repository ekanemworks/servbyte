import { Component, OnInit } from '@angular/core';
import {ApiconnectService} from '../../apiconnect.service';
import {BasicClassType} from '../../signupclass';
import {HttpClient} from '@angular/common/http';

@Component({
  selector: 'app-foodsearch',
  templateUrl: './foodsearch.component.html',
  styleUrls: ['./foodsearch.component.css']
})
export class FoodsearchComponent implements OnInit {
  typestandard: BasicClassType[];
  gridconfig = 3;
  filtercity: any;
  ErrorMessage: string;

  mealname: any;
  mealprice: any;
  mealdescription: any;
  mealimage: any;
  mealid: any;

  // THE WEBSITE LINK WHICH CAN BE CHANGED TO ANYTHING
  WEBSITE = 'http://localhost/Apps/ServByte/';

  constructor(private apiservice: ApiconnectService, private http: HttpClient) { }

  ngOnInit(): void {
    this.apiservice.getMeal().subscribe((data: BasicClassType[]) => {
      this.typestandard = data;
    });



    if(window.innerWidth>1000 && window.innerWidth<=3000){
      this.gridconfig = 4;
    }else if(window.innerWidth>720 && window.innerWidth<=1000){
      this.gridconfig = 3;
    }else{
      this.gridconfig = 2;
    }

  } //End of OnInit



  onResize(event): any {

    if(window.innerWidth>1000 && window.innerWidth<=3000){
      this.gridconfig = 4;
    }else if(window.innerWidth>720 && window.innerWidth<=1000){
      this.gridconfig = 3;
    }else{
      this.gridconfig = 2;
    }

  }


  Filter(): any{
    this.http.get(this.WEBSITE+"iltermeal.php?city="+this.filtercity)
    .subscribe((data: BasicClassType[]) => {
      this.typestandard = data;

      console.log(this.typestandard);
      if(!this.typestandard[0])
      {
        this.ErrorMessage = "No meal in this city yet!";
      }


    });


  }


}
