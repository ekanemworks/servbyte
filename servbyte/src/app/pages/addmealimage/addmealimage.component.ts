import { Component, OnInit } from '@angular/core';
import {ActivatedRoute, Router, ParamMap} from '@angular/router';
import {HttpClient} from '@angular/common/http';

@Component({
  selector: 'app-addmealimage',
  templateUrl: './addmealimage.component.html',
  styleUrls: ['./addmealimage.component.css']
})
export class AddmealimageComponent implements OnInit {
  mealid: any;
  errorcheck: any;


  // THE WEBSITE LINK WHICH CAN BE CHANGED TO ANYTHING
  WEBSITE = 'http://localhost/Apps/ServByte/';

  constructor(private route: ActivatedRoute, private router: Router, private http: HttpClient) { }

  selectedFile: File;


  ngOnInit(): void {
    this.route.paramMap.subscribe(params => {
      this.mealid = params.get('id');
    });



  }

  onFileChanged(event): any{
    this.selectedFile = event.target.files[0];
    console.log(this.selectedFile);
  }




  uploadimg(): any {

    if(!this.selectedFile)
    {
      this.errorcheck = "Select an image";
      console.log(this.errorcheck);
    }else
    {
      const uploadData = new FormData();
      uploadData.append('myfile', this.selectedFile, this.selectedFile.name);
      this.http.post(this.WEBSITE+"uploadimage.php?mealid="+this.mealid, uploadData)
      .subscribe(data => {
        console.log(data);
        this.router.navigate(['dashboard']);

      });
    }



  }



}
