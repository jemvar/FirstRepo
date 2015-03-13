#include <iostream>
#include "Person.h"
#include "Tweeter.h"
using namespace std;

int main(int argc, char const *argv[])
{
	Person p("Varun","Malhotra",123);
	Tweeter p1("Aashi","Malhotra",221,"@aashi");
	// cout<<"Exiting Function main"<<endl;
	// cout<<p.getName()<<" "<<p.getNumber()<<endl;
	// p.setNumber(1);
	// cout<<p.getName()<<" "<<p.getNumber()<<endl;
	if(p < p1)
	{
		cout<<"p is less than p1"<<endl;
	}
	else
	{
		cout<<"p is greater than p1"<<endl;
	}

	if(p < 120)
	{
		cout<<"p < 120"<<endl;
	}
	else
	{
		cout<<"p > 120"<<endl;
	}

	if(150 < p)
	{
		cout<<"p > 150"<<endl;
	}
	else
	{
		cout<<"p < 150"<<endl;
	}
	return 0;
}