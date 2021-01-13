import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AddmealimageComponent } from './addmealimage.component';

describe('AddmealimageComponent', () => {
  let component: AddmealimageComponent;
  let fixture: ComponentFixture<AddmealimageComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ AddmealimageComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(AddmealimageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
