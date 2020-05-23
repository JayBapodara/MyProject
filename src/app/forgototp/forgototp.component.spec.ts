import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ForgototpComponent } from './forgototp.component';

describe('ForgototpComponent', () => {
  let component: ForgototpComponent;
  let fixture: ComponentFixture<ForgototpComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ForgototpComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ForgototpComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
