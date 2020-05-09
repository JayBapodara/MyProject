import { Component, OnInit, Output, EventEmitter } from '@angular/core';
import { Router } from '@angular/router';
import { FormGroup, FormControl, Validators, FormBuilder } from '@angular/forms';
import { HttpClient, HttpHeaders } from '@angular/common/http';
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
  api: any;
  send_data: any;
  obj: any = [];
  list: any = [];
  updatedata:any;
  prmid:any;

  constructor(private router: Router, public http: HttpClient, private httpClient: HttpClient, private formBuilder: FormBuilder,
    private service: ApiService) {
    this.Showbook()
    this.Bookgroup = new FormGroup({
      id: new FormControl(''),
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
    this.service.techerMessage$ .subscribe(message => {
      console.log("this is message",message);
      this.obj = message;
      console.log("msg",this.obj)
    })
    this.Bookgroup = this.formBuilder.group({
      post_title: ['', Validators.required],
      post_mime_type: ['', [Validators.required, Validators.pattern("^((\\+91-?)|0)?[0-9]{10}$")]],
      post_content: ['', Validators.required],
      post_date: ['', Validators.required],
      post_date_gmt: ['', Validators.required],
      post_parent: ['', Validators.required],
      post_password: ['', Validators.required],
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
      this.service.booking(value)
      .subscribe(
        data => {
          this.data.push(value);
          console.log("POST Request is successful ", data);
          value.id = data
          console.log('this is prm id ====>', value.id);
          this.Bookgroup.reset();
        },
        error => {

          console.log("Error", error);

        }
      )

  }
  update(item) {
    console.log("item",item)
    localStorage.setItem('prmid', JSON.stringify(item.id));
    
    this.service.sendMessage(item)
    
  }
  Showbook() {
    this.service.edit()
    .subscribe((data) => {
      console.log('this is api response', data);
      // this.list.push(data);
      this.list = data;
    });
  }
  delete(id) {
    console.log("Id ====>", id)

    this.service.deletedata(id).subscribe(data => {
      this.Showbook();
    }
    )
  }
  updatedatanew(value){
    alert("Are you sure Update data");
    console.log("this is value",value.id);
     this.prmid = JSON.parse(localStorage.getItem('prmid'));
    console.log("primary id",this.prmid);
    
   
    this.updatedata = `http://localhost/wordpress/wp-json/custom-plugin/update?ID=${this.prmid}`
    console.log("ID",this.updatedata)
    
    const headers = new HttpHeaders().set('Content-Type','application/x-www-form-urlencoded');
    
    return this.httpClient.put(this.updatedata,`&post_title=${value.post_title}&post_mime_type=${value.post_mime_type}&post_content=${value.post_content}&post_date=${value.post_date}
    &post_date_gmt=${value.post_date_gmt}&post_parent=${value.post_parent}&post_password=${value.post_password}`,
    {headers, responseType: 'text'}).subscribe((data) =>{
      console.log("this is new data",data)
    })   
  }
}