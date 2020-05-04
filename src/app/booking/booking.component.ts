import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { FormGroup, FormControl, Validators, FormBuilder } from '@angular/forms';
import { HttpClient,HttpHeaders } from '@angular/common/http';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-booking',
  templateUrl: './booking.component.html',
  styleUrls: ['./booking.component.css']
})
export class BookingComponent implements OnInit {
  Bookgroup: FormGroup;
  jsonapifile: any;
  json;
  postData: any;
  data = [];
  submitted = false;

  // @Input() MSG = [];

  constructor(private router: Router, private httpClient: HttpClient,private formBuilder: FormBuilder, private service: ApiService) {
    this.Bookgroup = new FormGroup({
      id : new FormControl(''),
      post_title: new FormControl('', Validators.required),
      post_mime_type: new FormControl('', Validators.required),
      post_content: new FormControl('', Validators.required),
      post_date: new FormControl('', Validators.required),
      post_date_gmt: new FormControl('', Validators.required),
      post_parent: new FormControl('', Validators.required),
      post_password: new FormControl('', Validators.required),
      action: new FormControl('wp_posts', Validators.required)
    });
  }
  
  ngOnInit(): void {
    this.Bookgroup = this.formBuilder.group({
      post_title: ['', Validators.required],
      post_mime_type: ['',[Validators.required,Validators.pattern("^((\\+91-?)|0)?[0-9]{10}$")]],
      post_content: ['', Validators.required],
      post_date: ['', Validators.required],
      post_date_gmt: ['', Validators.required],
      post_parent: ['', Validators.required],
      post_password: ['',Validators.required],
  })
  }
  get f() { return this.Bookgroup.controls; } 
  onSubmit() {
    this.submitted = true;
    if (this.Bookgroup.invalid) {
        return;
    }
}
Book(value) {
    this.jsonapifile = `http://localhost/wordpress/wp-json/custom-plugin/hotel`
    // console.log("Success",value).
    const headers = new HttpHeaders().set('Content-Type', 'application/x-www-form-urlencoded');
    console.log('object ',value)
    var userID = localStorage.getItem('ID');
    console.log(userID);

    return this.httpClient.post(this.jsonapifile,`post_mime_type=${value.post_mime_type}&post_date_gmt=${value.post_date_gmt}&post_parent=${value.post_parent}&post_password=${value.post_password}&post_title=${value.post_title}&post_date=${value.post_date}&post_content=${value.post_content}&action=${'wp_posts'}`,
    {headers, responseType: 'text'})
    .subscribe(
      data => {
        this.data.push(data);
        console.log("POST Request is successful ",data);
        value.id = data
        console.log('this is prm id ====>', value.id);
      },
      error  => {

        console.log("Error", error);

        }
    )

      }
    }
