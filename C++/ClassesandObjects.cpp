#include <iostream>
#include "Person.h"
#include "Tweeter.h"
using namespace std;

int main(int argc, char const *argv[])
{
	Person p("Varun","Malhotra",123);
	{
		Tweeter p1("Aashi","Malhotra",221,"@aashi");
	}
	cout<<"Exiting Function main"<<endl;
	cout<<p.getName()<<" "<<p.getNumber()<<endl;
	p.setNumber(1);
	cout<<p.getName()<<" "<<p.getNumber()<<endl;
	return 0;
}