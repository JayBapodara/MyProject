import { Component, OnInit } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  constructor(public http: HttpClient) { }
  newapi: any;
  list: any = [];
  ngOnInit(): void { }
  logout() {
    this.http.get('http://localhost/wordpress/wp-json/custom-plugin/logout')
      .subscribe(data => {
        this.newapi = data
        localStorage.removeItem('ID');
      })
  }
  Showbook() {
    let id = localStorage.getItem('ID');
    console.log("ID *", id)

    const headers = new HttpHeaders().set('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    return this.http.get
      (`http://localhost/wordpress/wp-json/custom-plugin/book?&pinged=${id}`,
        { headers, responseType: 'text' }).subscribe((data) => {
          console.log('this is api response', data);
          this.list.push(data);
        });

    //   let url= `http://localhost/wordpress/wp-json/custom-plugin/hotel?&pinged=` +id
    //   this.http.get(url)
    //   .subscribe(data=>{
    //     this.list.push(data);
    //     console.log("API Call",this.list)
    // })
  }
}