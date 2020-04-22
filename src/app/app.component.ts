import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { HttpClient } from '@angular/common/http';
import { ApiService } from './api.service';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {

loginForm: FormGroup;
  jsonapifile : any 
  constructor(private router: Router, private http:HttpClient ,private service:ApiService) {
    this.loginForm = new FormGroup({
      username: new FormControl('', Validators.required),
      password: new FormControl('', Validators.required)
    });
  }

  loginUser(value) {
    this.http.get(`http://localhost/wordpress/wp-json/custom-plugin/login?username=${value.username}&password=${value.password}`)
    .subscribe(data => {
      this.jsonapifile = data
      console.log("Success", this.jsonapifile)
    },
    error => {
      console.error(" Error ", error)
    })
    // console.log(this.http.get(http://localhost/wordpress_training/wordpress/wp-json/wp/v2/login?
    // username=${value.username}&password=${value.password})) 
  }
}