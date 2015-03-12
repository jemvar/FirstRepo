#include "Person.h"
#include <iostream>
using namespace std;

Person::Person(string first, string last, int arbitrary):firstname(first), lastname(last), arbitrarynumber(arbitrary)
{
	cout<<"Constructing "<<getName()<<endl;
}

Person::~Person()
{
	cout<<"Destructing "<<getName()<<endl;
}

string Person::getName()
{
	return firstname+" "+lastname;
}