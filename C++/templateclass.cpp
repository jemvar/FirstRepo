#include <iostream>
#include <string>
#include "Accumulator.h"
using namespace std;

int main(int argc, char const *argv[])
{
	Accumulator<int> intAccum(0);
	intAccum+=3;
	intAccum+=4;
	cout<<intAccum.getTotal()<<endl;
	Accumulator<string> stringAccum("");
	stringAccum+="hello";
	stringAccum+=" world";
	cout<<stringAccum.getTotal()<<endl;
	return 0;
}

