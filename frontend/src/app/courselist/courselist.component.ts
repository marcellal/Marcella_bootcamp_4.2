import { Component, OnInit } from '@angular/core';
import { DataService } from '../services/data.service'

@Component({
  selector: 'app-courselist',
  templateUrl: './courselist.component.html',
  styleUrls: ['./courselist.component.css']
})
export class CourselistComponent implements OnInit {

  constructor(private datacourse:DataService) { }

  ngOnInit() {
  }


  newCourse : string = "";
  newAssignment : string = "";
  

  addCourse(){
  this.datacourse.courselist.push({"Course":this.newCourse, "Assignment":this.newAssignment})
  this.newCourse="";
  this.newAssignment="";
 

  }

}
