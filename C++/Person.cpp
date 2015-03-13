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

bool Person::operator<(Person& p)
{
	return arbitrarynumber < p.arbitrarynumber;
}

bool Person::operator<(int n)
{
	return arbitrarynumber < n;
}

bool operator<(int n, Person& p)
{
	return n < p.getNumber();
}