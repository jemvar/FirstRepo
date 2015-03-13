#include <string>
#pragma once

class Person
{
private:
	std::string firstname;
	std::string lastname;
	int arbitrarynumber;
public:
	Person(std::string first, std::string last, int arbitrary);
	~Person();
	std::string getName();
	int getNumber()
	{
		return arbitrarynumber;
	}
	void setNumber(int number)
	{
		arbitrarynumber = number;
	}
	bool operator<(Person& p);
	bool operator<(int n);
};

bool operator<(int n, Person& p);