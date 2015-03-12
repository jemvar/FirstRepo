#include <iostream>
// #include "Person.h"
#include "Tweeter.h"

int main(int argc, char const *argv[])
{
	Person p("Varun","Malhotra",123);
	{
		Tweeter p1("Aashi","Malhotra",221,"@aashi");
	}
	std::cout<<"Exiting Function main"<<std::endl;
	return 0;
}