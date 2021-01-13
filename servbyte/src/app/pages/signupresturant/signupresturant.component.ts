import { Component, OnInit } from '@angular/core';
import {FormControl, Validators, FormBuilder, FormGroup} from '@angular/forms';
import {ApiconnectService} from '../../apiconnect.service';
import {BasicClassType} from '../../signupclass';
import {Router} from '@angular/router';

@Component({
  selector: 'app-signupresturant',
  templateUrl: './signupresturant.component.html',
  styleUrls: ['./signupresturant.component.css']
})
export class SignupresturantComponent implements OnInit {
  signupclassV: BasicClassType[];


  constructor(private service: ApiconnectService, private formBuilder: FormBuilder, private router: Router) { }


  addForm: FormGroup;
  ngOnInit(): void {


    this.addForm = this.formBuilder.group({
        city: ['', Validators.required],
        resturantname: ['', [Validators.required, Validators.maxLength(30)]],
        email: ['', [Validators.required, Validators.maxLength(30)]],
        password: ['', [Validators.required, Validators.maxLength(30)]]
      });




    }

    onSubmit(): any {
      console.log(this.addForm.value);
      this.service.registerresturant(this.addForm.value).subscribe(data => {
        console.log(data);
        this.router.navigate(['dashboard']);
      });

       }

}
