#include <string>
#ifndef Person_H
#define Person_H 

class Person
{
private:
	std::string firstname;
	std::string lastname;
	int arbitrarynumber;
public:
	Person(std::string first, std::string last, int arbitrary);
	~Person();
	
};
#endif