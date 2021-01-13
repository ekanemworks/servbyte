import { Component, OnInit } from '@angular/core';import {FormControl, Validators, FormBuilder, FormGroup} from '@angular/forms';
import {ApiconnectService} from '../../apiconnect.service';
import {BasicClassType} from '../../signupclass';
import {Router} from '@angular/router';

@Component({
  selector: 'app-addmeal',
  templateUrl: './addmeal.component.html',
  styleUrls: ['./addmeal.component.css']
})
export class AddmealComponent implements OnInit {
  signupclassV: BasicClassType[];

  constructor(private service: ApiconnectService, private formBuilder: FormBuilder, private router: Router) { }

  addForm: FormGroup;
  ngOnInit(): void {


    this.addForm = this.formBuilder.group({
      mealname: ['', Validators.required],
        price: ['', [Validators.required, Validators.maxLength(30)]],
        preparationtime: ['', [Validators.required, Validators.maxLength(30)]],
        description: ['', [Validators.required, Validators.maxLength(30)]],
        addedby: ['', [Validators.required, Validators.maxLength(30)]],
      });




    }



    onAdd(): any {
      console.log(this.addForm.value);
      this.service.addmeal(this.addForm.value).subscribe(data => {
        console.log(data);
        this.router.navigate(['/addmealimage',data]);
      });

       }

}
