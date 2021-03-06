import { Injectable } from '@angular/core';
import { CanActivate, ActivatedRouteSnapshot, RouterStateSnapshot, UrlTree, Router, Route } from '@angular/router';
import { Observable } from 'rxjs';
import { ApiService } from  './api.service';
@Injectable({
  providedIn: 'root'
})
export class ActivateGuard implements CanActivate {
  constructor(private ApiService:ApiService,private router:Router){}
  canActivate(
    next: ActivatedRouteSnapshot,
    state: RouterStateSnapshot): Observable<boolean | UrlTree> | Promise<boolean | UrlTree> | boolean | UrlTree {
    if(this.ApiService.isadminrights()){
      return true;
    }else{
      alert("you don't have a permission  to view this page , redirecting to home");
      this.router.navigate(['login']);
    }
  }
}
