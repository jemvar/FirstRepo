#include <iostream>
#include "Person.h"

int main(int argc, char const *argv[])
{
	Person p("Varun","Malhotra",123);
	{
		Person p1("Aashi","Malhotra",221);
	}
	std::cout<<"Exiting Function main"<<std::endl;
	return 0;
}