import { Injectable } from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ArticleService {

  url:string = 'http://localhost:8000';
  constructor(private http : HttpClient) {}

  listCustomers(){
    return this.http.get<any>(this.url+ `/api/customer`);
  }

  httpOptions = {
    headers : new HttpHeaders({ 'Content-Type': 'application/json', 'Accept' : 'application/json' })
  };

  addCustomers(customer:any): Observable<any>{
    return this.http.post<any>(this.url+ `/api/customer`,customer, this.httpOptions);

  }
}


