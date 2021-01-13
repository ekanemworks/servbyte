import { Component, OnInit } from '@angular/core';
import {ActivatedRoute, Router, ParamMap} from '@angular/router';
import {HttpClient} from '@angular/common/http';

@Component({
  selector: 'app-checkout',
  templateUrl: './checkout.component.html',
  styleUrls: ['./checkout.component.css']
})
export class CheckoutComponent implements OnInit {
  mealid: any;
  mealdata: any;
  picture: any;

  // THE WEBSITE LINK WHICH CAN BE CHANGED TO ANYTHING
  WEBSITE = 'http://localhost/Apps/ServByte/';


  constructor(private route: ActivatedRoute, private router: Router, private http: HttpClient) { }

  ngOnInit(): void {
    this.route.paramMap.subscribe(params => {
      this.mealid = params.get('id');
    });

    this.http.get(this.WEBSITE+"getspecificmeal.php?mealid="+this.mealid)
    .subscribe(data => {
      this.mealdata = data[0];
      this.mealdata['price'];
      console.log(this.mealdata["price"]);
      console.log(data);
    });

  }



}
