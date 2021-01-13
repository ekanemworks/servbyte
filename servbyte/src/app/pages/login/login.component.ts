import { Component, OnInit } from '@angular/core';
import {FormControl, Validators, FormBuilder, FormGroup} from '@angular/forms';
import {ApiconnectService} from '../../apiconnect.service';
import {BasicClassType} from '../../signupclass';
import {Router} from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  LoginForm: FormGroup;
  Errorcheck: any;
  constructor(private service: ApiconnectService, private formBuilder: FormBuilder, private router: Router) { }

  ngOnInit(): void {
    this.LoginForm = this.formBuilder.group({
      accounttype: ['', [Validators.required, Validators.maxLength(30)]],
      email: ['', [Validators.required, Validators.maxLength(30)]],
      password: ['', [Validators.required, Validators.maxLength(19)]]
    });



  }




  onSubmit(): any {
    console.log(this.LoginForm.value);
    this.service.loginverification(this.LoginForm.value).subscribe(data => {
      this.Errorcheck = data;

      if(this.Errorcheck == "authenticated")
      { this.router.navigate(['dashboard']);}
      console.log(data);

    });

     }


}
