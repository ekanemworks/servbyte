import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SignupdeliveryComponent } from './signupdelivery.component';

describe('SignupdeliveryComponent', () => {
  let component: SignupdeliveryComponent;
  let fixture: ComponentFixture<SignupdeliveryComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ SignupdeliveryComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(SignupdeliveryComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
