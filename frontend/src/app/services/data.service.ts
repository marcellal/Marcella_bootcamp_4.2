import { Injectable } from '@angular/core';

@Injectable()
export class DataService {

  constructor() { }
 courselist : Object[] = [
    {"Course": "ABC", "Assignment": "CDE"},
    {"Course": "GKIJ", "Assignment": "LGKJ"},
    {"Course": "DADFA", "Assignment": "FSFGGS"},
    {"Course": "FGDFGD", "Assignment": "ASF"}
   
  ];
}
