import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LoginComponent } from './login/login.component';
import { HomeComponent } from './home/home.component';
import { BookingComponent } from './booking/booking.component';
import {ActivateGuard} from './activate.guard';


const routes: Routes = [
  { path: 'login', component: LoginComponent,pathMatch: 'full', canActivate:[ActivateGuard] },
  { path: 'home', component: HomeComponent, pathMatch: 'full' },
  { path: 'booking', component: BookingComponent, pathMatch: 'full' }

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }