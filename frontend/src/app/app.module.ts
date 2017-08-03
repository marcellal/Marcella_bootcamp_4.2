import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';

import { AppComponent } from './app.component';
import { CourselistComponent } from './courselist/courselist.component';

import { DataService} from './services/data.service';

@NgModule({
  declarations: [
    AppComponent,
    CourselistComponent
  ],
  imports: [
    BrowserModule, FormsModule
  ],
  providers: [DataService],
  bootstrap: [AppComponent]
})
export class AppModule { }
