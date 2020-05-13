import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Subject } from 'rxjs';
// import { userInfo } from 'os';


@Injectable({
  providedIn: 'root'
})

export class ApiService {
  // booking(value: any) {
  //   throw new Error("Method not implemented.");
  // }
  private _techerMessageSource = new Subject<any>();
  techerMessage$ = this._techerMessageSource.asObservable();

  constructor(private httpClient: HttpClient) { }
  getUser() {
    // console.log("service calleed");
    return this.httpClient.get('http://localhost/wordpress/wp-json/custom-plugin/login');
  }

  signupuser(){
    return this.httpClient.get('http://localhost/wordpress/wp-json/custom-plugin/signup');
  }
  sendMessage(message:any){
    this._techerMessageSource.next(message);
  }
  isadminrights(): boolean {
    return true;
  }

  edit() {
    let id = localStorage.getItem('ID');
    console.log("ID *", id)
    var email = localStorage.getItem('user_email');
    console.log("user_email id", email);
    const headers = new HttpHeaders().set('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    return this.httpClient.get
      (`http://localhost/wordpress/wp-json/custom-plugin/book?&pinged=${id}`,
        { headers })
  }
  booking(value){
    const headers = new HttpHeaders().set('Content-Type', 'application/x-www-form-urlencoded');
    console.log('object value', value)
    var log_id = localStorage.getItem('ID');
    console.log(log_id);
  
    return this.httpClient.post(
      ` http://localhost/wordpress/wp-json/custom-plugin/hotel`,
        `&log_id=${log_id}&post_title=${value.post_title}&post_mime_type=${value.post_mime_type}&post_content=${value.post_content}&post_date=${value.post_date}
      &post_date_gmt=${value.post_date_gmt}&post_parent=${value.post_parent}&post_password=${value.post_password}
      &action=${'wp_posts'}`,
      { headers, responseType: 'text' })
  }
  deletedata(id){
    const headers = new HttpHeaders().set('Content-Type','application/x-www-form-urlencoded');
      return this.httpClient.delete(`http://localhost/wordpress/wp-json/custom-plugin/delete?ID=${id}`,
      {headers , responseType:'text'} )
    }
}


