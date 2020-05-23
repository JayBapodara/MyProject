import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';
import { Router } from '@angular/router';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { FormGroup, FormControl, Validators } from '@angular/forms';

@Component({
  selector: 'app-admin',
  templateUrl: './admin.component.html',
  styleUrls: ['./admin.component.css']
})
export class AdminComponent implements OnInit {
  signupForm: any;
  jsonapifile: Object;
  userForm: FormGroup;
  constructor(private router: Router, private http: HttpClient, private service: ApiService) {
    this.userForm = new FormGroup({
      user_login: new FormControl(''),
      user_email: new FormControl(''),
      user_nicename: new FormControl(''),
      user_pass: new FormControl(''),
      action: new FormControl('wp_users')
    });
  }
  ngOnInit(): void {
  }

  signupuser(value) {
    console.log("value is", value)
    const headers = new HttpHeaders().set('Content-Type', 'application/x-www-form-urlencoded');
    return this.http.post(`http://localhost/wordpress/wp-json/custom-plugin/signup`,
      `&user_login=${value.user_login}&user_email=${value.user_email}&user_nicename=${value.user_nicename}&user_pass=${value.user_pass}
    &action=${'wp_users'}`,
      { headers, responseType: 'text' })
      .subscribe(data => {
        console.log("data is ", data)
        this.router.navigate(['login'])
      }),
    this.service.emailuser(value).subscribe(data => {
      // console.log("this is user id", data)
    })
  }
}
