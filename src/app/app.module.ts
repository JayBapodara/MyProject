import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule, HTTP_INTERCEPTORS }    from '@angular/common/http';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { RouterModule } from '@angular/router';
import { ReactiveFormsModule, FormsModule} from '@angular/forms';
import { HomeComponent } from './home/home.component';
import { LoginComponent } from './login/login.component';
import { BookingComponent } from './booking/booking.component';
import { ActivateGuard } from './activate.guard';
import { Active2Guard } from './active2.guard';
import { ApiService } from './api.service';
import { AdminComponent } from './admin/admin.component';
// import { Approutes } from './Routing';
import {Interceptor} from './interceptor';
import { ForgotComponent } from './forgot/forgot.component';
import { ForgototpComponent } from './forgototp/forgototp.component';
import { OtpComponent } from './otp/otp.component';
import { CountdownModule } from 'ngx-countdown';


@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    LoginComponent,
    BookingComponent,
    AdminComponent,
    ForgotComponent,
    ForgototpComponent,
    OtpComponent,


  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    CountdownModule,
    
    BrowserAnimationsModule,
    FormsModule,
    
    RouterModule,
    ReactiveFormsModule,
    FormsModule

  ],
  providers: [ActivateGuard,Active2Guard,ApiService,{provide: HTTP_INTERCEPTORS, useClass : Interceptor, multi:true }],
  bootstrap: [AppComponent]
})
export class AppModule { }
