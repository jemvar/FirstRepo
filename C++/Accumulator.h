template <class T>
class Accumulator
{
private:
	T total;
public:
	Accumulator(T start):total(start){}
	T operator+=(const T& val){total = total + val; return total;}
	T getTotal(){ return total;}
};

// template <>
// class Accumulator<Person>
// {
// private:
// 	int total;
// public:
// 	Accumulator(int start):total(start){}
// 	int operator+=(Person& p){total = total + p.getNumber(); return total;}
// 	int getTotal(){ return total;}
// };