import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FoodfilteredComponent } from './foodfiltered.component';

describe('FoodfilteredComponent', () => {
  let component: FoodfilteredComponent;
  let fixture: ComponentFixture<FoodfilteredComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FoodfilteredComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(FoodfilteredComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
