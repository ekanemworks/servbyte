import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {
  nocategoryError: any;

  constructor() { }

  ngOnInit(): void {
  }

  nocategory(): any{
    this.nocategoryError = "Under maintenance Check our food category!";
  }

}
