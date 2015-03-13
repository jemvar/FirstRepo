#include <iostream>
#include "Accumulator.h"
#include "Person.h"
using namespace std;

int main(int argc, char const *argv[])
{
	Accumulator<Person> personAccum(0);
	Person p1("V","M",1);
	Person p2("V","N",3);
	personAccum+=p1;
	personAccum+=p2;
	cout<<personAccum.getTotal()<<endl;
	return 0;
}

