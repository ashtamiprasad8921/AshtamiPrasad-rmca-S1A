#include<stdio.h>
#include<stdlib.h>
void main()
{
 int select,A[50],B[50],C[50],a,b,i; 		
do
 {
   printf("\n Menu : ");
   printf("\n1.Union\n2.Intersection\n3.Difference\n4.Exit");
   printf("\nChoice: ");
   scanf("%d",&select);	
  switch(select)
  {
   case 1:printf("\nEnter size of first set: ");
          scanf("%d",&a);
   	      printf("\nEnter size of second set: ");
		  scanf("%d",&b);
		  if(a!=b)
		  {
		  printf("\nCannot perform union!");
		  break;
	       }
	      printf("\nEnter elements of first set: "); 
	      for(i=0;i<a;i++)
		  {
		   	scanf("%d",&A[i]);
		   } 
		  printf("\nEnter elements of second set: "); 
	      for(i=0;i<b;i++)
		  {
		   	scanf("%d",&B[i]);
		   } 
		  printf("\nElements of set1 union set2: "); 
		  for(i=0;i<a;i++)
		  {
		   C[i]=A[i]|B[i];
		   printf("%d ",C[i]);
		   } 
		  break;
   case 2:printf("\nEnter size of first set: ");
          scanf("%d",&a);
   	      printf("\nEnter size of second set: ");
		  scanf("%d",&b);
		  if(a!=b)
		  {
		  printf("\nCannot perform intersection!");
		  break;
	       }
	      printf("\nEnter elements of first set: "); 
	      for(i=0;i<a;i++)
		  {
		   	scanf("%d",&A[i]);
		   } 
		  printf("\nEnter elements of second set: "); 
	      for(i=0;i<b;i++)
		  {
		   	scanf("%d",&B[i]);
		   } 
		  printf("\nElements of set1 intersection set2: "); 
		  for(i=0;i<a;i++)
		  {
		   C[i]=A[i]&B[i];
		   printf("%d ",C[i]);
		   }
   	      break;
   case 3:printf("\nEnter size of first set: ");
          scanf("%d",&a);
   	      printf("\nEnter size of second set: ");
		  scanf("%d",&b);
		  if(a!=b)
		  {
		  printf("\nCannot perform difference!");
		  break;
	       }
	      printf("\nEnter elements of first set: "); 
	      for(i=0;i<a;i++)
		  {
		   	scanf("%d",&A[i]);
		   } 
		  printf("\nEnter elements of second set: "); 
	      for(i=0;i<b;i++)
		  {
		   	scanf("%d",&B[i]);
		   }
		  for(i=0;i<b;i++)
		  {
		   if(A[i]==0)
		   C[i]=0;
		   else 
		   {
		    if(B[i]==1)
			C[i]=0;
			else
			C[i]=1;	
		    }	
		   }  
		  printf("\nElements of set1 - set2: "); 
		  for(i=0;i<a;i++)
		  {
		   printf("%d ",C[i]);
		   }
          break;	
   case 4:
          exit(0);
   	      break;
   default:printf("\nInvalid choice!"); 
   }
  }	
 while(1);	
 }
