import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SignupresturantComponent } from './signupresturant.component';

describe('SignupresturantComponent', () => {
  let component: SignupresturantComponent;
  let fixture: ComponentFixture<SignupresturantComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ SignupresturantComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(SignupresturantComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
