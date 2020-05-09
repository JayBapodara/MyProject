import { Component, OnInit, Input } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  constructor(public http: HttpClient) {
   }
  newapi: any;
  ngOnInit(): void { }
  logout() {
    this.http.get('http://localhost/wordpress/wp-json/custom-plugin/logout')
      .subscribe(data => {
        this.newapi = data
        localStorage.removeItem('ID');
      })
  }
    }
