import { Component, OnInit } from '@angular/core';

@Component({
  selector: '[app-test]',
  template: `<div class="font">
               Inline template
             </div>`,
  styles: [`
    div {
      color: red;
      font-size: 20px;
      padding: 20px 0px 20px 700px;
    }
    div:hover{
      color: black;
    }`
  ]
})
export class TestComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

}